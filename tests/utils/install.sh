meta_data=$(curl 'https://googlechromelabs.github.io/chrome-for-testing/last-known-good-versions-with-downloads.json')

cd ~
wget $(echo "$meta_data" | jq -r '.channels.Stable.downloads.chrome[0].url')

wget $(echo "$meta_data" | jq -r '.channels.Stable.downloads.chromedriver[0].url')
