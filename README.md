# Clone Messenger ( React + Laravel )

## Project Features
1. Sending and receiving messages in real time
2. Sending emojis
3. Send markdown messages
4. Deleting your own sent messages
5. Load older messages with infinite scroll loading
6. Sending all types of files
7. Dedicated button to quickly share images
8. Dedicated button to record and send audio files
9. Preview on small screen and on full screen of images, videos, audio, and PDFs
10. Ability to add new users
11. Block and Unblock users
12. Give and remove admin permissions to users
13. Create Groups and add users
14. Edit or delete groups. This will start a background job, so that if the group is large and needs several minutes to be deleted, it will be deleted in background and will notify users using web sockets
15. Update your own profile details: Name, email, password, or profile picture
16. Fully responsive UI working on very small devices

## Installation
1. Clone the project
2. Navigate to the project's root directory using terminal
3. Create .env file - cp .env.example .env
4. Execute composer install
5. Execute npm install
6. Set application key - php artisan key:generate --ansi
7. Execute migrations and seed data - php artisan migrate --seed
8. Start vite server - npm run dev
9. Start Artisan server - php artisan serve
10. php artisan reverb:start --debug
11. php artisan queue:list

## Demo
Comming soon.
