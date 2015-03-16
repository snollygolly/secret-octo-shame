START_LEVEL=`screenbrightness -l | tail -1 | awk '{print $NF}'`
read -p "The start level is: $START_LEVEL, Choose a new level: " NEW_LEVEL
for i in `seq 1 $1`;
do
  screenbrightness $NEW_LEVEL
  sleep 0.3
  screenbrightness $START_LEVEL
  sleep 0.3
done
