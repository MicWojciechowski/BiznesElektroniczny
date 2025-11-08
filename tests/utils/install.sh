#!/usr/bin/env bash

meta_data=$(curl -s 'https://googlechromelabs.github.io/chrome-for-testing/last-known-good-versions-with-downloads.json')

target_dir="$HOME/chrome"
mkdir -p "$target_dir"

cd "$target_dir" || exit 1

curl -LO $(echo "$meta_data" | jq -r '.channels.Stable.downloads.chrome[0].url')

curl -LO $(echo "$meta_data" | jq -r '.channels.Stable.downloads.chromedriver[0].url')

unzip -o '*.zip'
rm *.zip