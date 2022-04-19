<!-- @format -->

# LEARNING PHP

## Introduction

A long time ago I decided that I wanted to build a Wordpress-based portfolio so that I could have a CMS and add a blog. I purchased the domain, set up hosting, installed Wordpress, and began to customize different themes - but it was never quite enough control for my liking.

I already knew HTML, CSS, and Javascript so I decided that I needed to learn how to develop Wordpress themes from scratch. Quickly I realized that I had insufficient knowledge of the prerequisite information to complete the course, and it was finally time to learn PHP (something I had been pushing off for awhile).

## Instructions

In order to view the files locally, you must have PHP installed on your computer and opened up on a local server (should be installed by default for Mac users):

1. Fork & download directory
2. Open CLI
3. Navigate to desired root directory (the repo that you forked in this case)
4. Type `php -S localhost:4000` to open root directory on port 4000
5. In the URL bar, add `/path/file-name.php` to open the desired file inside the root directory

## Resources

- [PHP for Beginners](https://youtu.be/OK_JCtrrv-c)
- [Learn PHP for Wordpress](https://code.tutsplus.com/courses/learn-php-for-wordpress)
- [Wordpress Theme Development](https://youtu.be/-h7gOJbIpmo)

## Viewing Notes

- I've created a `<section>` element to house each individual PHP lesson throughout the course. Each element has an HTML class to toggle the display its display. Add the class like so to toggle: `<section class="hide">`

## Lessons Learned

- URL Parameters
  - Great for storing information about a site
  - Not secure
  - `post` is a more secure method for URL params; input data does not appear in the URL
    - Most developers use `post` in `<form>`'s
