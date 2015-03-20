#! /bin/bash

# _deploy.sh

echo "Building site..."
jekyll build
echo "Build complete!"

echo "Deploying to server..."
rsync -vrzc --delete _site/ edmundojr:www
echo "Deploy complete!"