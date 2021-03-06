#!/bin/bash -x
# resize the SD card to minimum size and zip it to image directory
# assume /dev/sdg3 is partition to be shrunk
# parameter 1 - output file name
# parameter 2 - optional root device partition otherwise /dev/sdg3
# parameter 3 - optional image directory otherwise /curation/images
# Automatically determine a size for the output disk image
# (including root, swap, and boot partitions).
#
# This is calculated by using resize2fs to shrink, then adding the space
# occupied by previous partitions
# Assumes root is last partition

if [ $# -eq 0 ]; then
   echo "Usage: $0 filename (no .img), optional rootfs device (like /dev/sdg3), optional image directory (like /curation/images)"
   exit 1
fi

FILENAME=$1.img

if [ -z $2 ]; then
   PARTITION=/dev/sdg3
else
   PARTITION=$2
fi

if [ ! -b $PARTITION ];then
   echo "Device $PARTITION not found".
   exit 1
fi

if [ -z $3 ]; then
   IMAGE_DIR=/curation/images
else
   IMAGE_DIR=$3
fi

mkdir -p $IMAGE_DIR
cd $IMAGE_DIR

umount $PARTITION
umount /media/usb*

DEVICE=${PARTITION:0:-1}
PART_DIGIT=${PARTITION: (-1)}
PART_START_SECTOR=`parted -sm  $DEVICE unit s print|cut -d: -f1,2|grep $PART_DIGIT:|cut -d: -f2`
root_start=${PART_START_SECTOR:0:-1}

# fetch the size of ROOT PARTITION
blocks4k=`e2fsck -n $PARTITION 2>/dev/null|grep blocks|cut -f5 -d" "|cut -d/ -f2`

# total prior sectors is 1 less than start of this one
prior_sectors=$(( root_start - 1 ))
root_end=$(( (blocks4k * 8) + prior_sectors ))

umount $PARTITION
e2fsck -y $PARTITION
e2fsck -f $PARTITION
resize2fs -M $PARTITION |grep Nothing


umount $PARTITION

parted -s $DEVICE rm $PART_DIGIT
parted -s $DEVICE unit s mkpart primary ext4 $root_start $root_end

umount $PARTITION
e2fsck -y $PARTITION

#last_sector=`parted -sm  $DEVICE unit s print|cut -d: -f1,3|grep $PART_DIGIT:|cut -d: -f2`
last_sector=`parted -s $DEVICE unit s print |tail -2 |head -1| awk '{print $3}'`
last=${last_sector:0:-1}
echo "last sector: $last"
dd if=$DEVICE of=$FILENAME bs=512 count=$last

zip $FILENAME.zip $FILENAME
md5sum $FILENAME > $FILENAME.md5
md5sum $FILENAME.zip > $FILENAME.zip.md5
