#!/bin/sh

NAME="com_krizalys_countries"
OUTPUTDIR="/tmp"
DIR="../joomla/${NAME}"
random="$(cat /dev/urandom | tr -dc 'a-zA-Z0-9' | fold -w 32 | head -n 1)"
workdir="${OUTPUTDIR}/${random}"
archivepath="${OUTPUTDIR}/${NAME}.zip"
mkdir "${workdir}"
cp -r "${DIR}" "${workdir}"

if [ -f ${archivepath} ]; then
    rm -f ${archivepath}
fi

wd="$(pwd)"; cd "${workdir}/${NAME}"; zip -r ${OUTPUTDIR}/${NAME} *; cd "${wd}"
rm -rf "${workdir}"
