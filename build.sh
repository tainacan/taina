echo "Compiling necessary stuff..."
cd ./taina
npm install
npm run build
cd ../

if [ -z "$1" ]
then
    echo "Done!"
else
    echo "Done. Moving files to destination folder: $1"
    rm -rf $1/taina
    cp -r ./taina $1
    echo "Cleaning some files not necessary for the theme to work..."
    rm -f $1/taina/package.json
    rm -f $1/taina/package-lock.json
    rm -rf $1/taina/node_modules
    rm -rf $1/taina/assets/scss
    echo "Done!"
fi