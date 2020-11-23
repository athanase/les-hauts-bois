#!/bin/bash
folder=$1

echo "Processing folder $folder...";
cp -r raw/$folder/* $folder/; mogrify -resize 1000 $folder/*.jpg;
