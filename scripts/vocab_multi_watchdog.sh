#!/bin/bash
cd ~
KEYS_FILE=~/pexels_keys.txt
mapfile -t KEYS < "$KEYS_FILE"
TOTAL=${#KEYS[@]}

for i in "${!KEYS[@]}"; do
  KEY="${KEYS[$i]}"
  LOG=~/vocab_images_log_shard${i}.txt
  (
    while true; do
      if ! pgrep -f "fetch_vocab_images_multi.php --key=$KEY --shard=$i/$TOTAL" > /dev/null; then
        echo "$(date): restarting shard $i/$TOTAL" >> "$LOG"
        php ~/fetch_vocab_images_multi.php --key="$KEY" --shard=$i/$TOTAL >> "$LOG" 2>&1
      fi
      sleep 30
    done
  ) &
done
wait
