#/usr/bin/bash
 
LOGIN=$1
cat<<EOF | mail -s "Passwort-Reset fuer: $LOGIN" helge.wiethoff@thga.de
`date --iso-8601=ns`

Username: $LOGIN

Es wurde ueber https://ssp.thga.de das Passwort fuer $LOGIN zurueckgesetzt. Uhrzeit: `date`
EOF

exit 0
