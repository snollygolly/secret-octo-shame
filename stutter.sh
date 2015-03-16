START_LEVEL=`osascript -e 'get volume settings'| grep -o -E '[0-9]+' | head -1 | sed -e 's/^0\+//'`
ADJUSTED_LEVEL=`echo "scale=1; $START_LEVEL/100*7" | bc`
osascript -e 'set volume 0'
sleep 0.1
osascript -e "set volume $ADJUSTED_LEVEL"
sleep 0.1
osascript -e 'set volume 0'
sleep 0.1
osascript -e "set volume $ADJUSTED_LEVEL"
sleep 0.1
osascript -e 'set volume 0'
sleep 0.1
osascript -e "set volume $ADJUSTED_LEVEL"
sleep 0.1
osascript -e 'set volume 0'
sleep 0.1
osascript -e "set volume $ADJUSTED_LEVEL"
