## Installing Laravel (George)
To get George Laravel running properly during development, you need to follow the steps below before you can start.

- Copy`.env.example` tot `.env` and edit your details.
  - Change the `APP_NAME` to: `"Restaurant George Zuilen"`.
  - Change the `APP_URL` to your WAMP-url.
  - Change the `DB_DATABASE`
  - Change the `DB_PASSWORD`


- Run: `npm install`


- Run: `composer install`


- Run: `composer require barryvdh/laravel-debugbar --dev`


- Run: `php artisan migrate:fresh --seed`
  - This terminal command ensures that all migrations required by the project are added to the database. With `--seed` we put already pre-made information in a particular database table.


- Change in `webpack.mix.js` the BrowserSync `proxy` and `host` to your WAMP-url.


- Run: `npm run dev`
  - This terminal command ensures that all existing fonts, images and css files are placed in the right place beforehand and that it continues to do so automatically.

## Starting with Development
When you are ready to start developing, you need to perform the steps below, otherwise nothing will happen when you change something and you will run into errors.

- Run: `npm run watch`
  - <font color="red">**Don't close the terminal after running this command!**</font>
  - This terminal command lets us monitor our files in the background for changes with BrowserSync, if you click CTRL+S in your IDE your Browser will automatically refresh itself without you having to do it yourself.
  - With this terminal command, we automatically rewrite the .scss files you are working in to .css level for the browser.


- Go to: `/resources/scss/_YOURNAME.scss`. Here you can take care of all your related CSS issues. Just keep in mind that you are using the basic structure of Bootstrap.


- In `/resources/views/(layouts/pages/modals)` you can see all the files concerning George, these files communicate with each other through the structure of Blade. **Be careful**, one wrong change can flatten everything.

## Useful tips and tricks
Some things are already taken care of within Laravel or you need to use them to make it work properly. Below is a small overview of useful tips and facts.

### Include an image
If you want to include an image you can use the following HTML rule:

```HTML
<img src="{{ asset('images/IMAGENAME.jpg') }}" class="img-fluid" alt="Description about image">
```

### Redirect to another existing page with the a tag
If you want to create a redirect to another existing page within George, you can do so by using the HTML rule below:

```HTML
<a href="{{ route('about') }}">Description here</a>
```

You can only use this method if you have also created the existing route, as you are calling the route name from `web.php` and this is what Laravel uses to get to the page.

### My image is not showing itself
This problem can occur due to several issues, see which one applies to you below.

1. You are not using the option previously offered to you to show an image.  To do this, check out **Include an image** in this same document.


2. You didn't put the image in the right folder. The image should be in `/resources/images`.


3. You are not using the correct image extension. Check carefully if you should use for example `.jpg` - `.jpeg` - `.png` and change this in your image tag.


4. Laravel does not have the image in the correct folder yet, this can sometimes happen. You can fix this by following the steps below.
   - Close your working terminal by typing `Control + C` in your terminal or click on the cross.
   - Use the command `npm run dev`.
   - Use the command `npm run watch` again and leave it open in your terminal.

## Any questions?
Above all, don't be embarrassed, Laravel is new to all of us and some are more knowledgeable about it than others. Feel free to ask Mitchel any questions you have if you get stuck.
