# Recreating Spotify with Symfony

## Project Description

This project aims to recreate the music streaming application *Spotify* using the Symfony framework. Key features include user authentication, music playback, playlists, and more.

## Table of Contents

- [Project Description](#project-description)
- [Key Features](#key-features)
- [Installation](#installation)
- [Usage](#usage)
- [Database Schema](#database-schema)

## Key Features

- User registration and authentication
- Browse and search for music tracks, albums, and artists
- Create and manage playlists
- Music playback functionality
- User profile management
- Recommendations and personalized playlists

## Installation

1. Clone the repository: `git clone https://github.com/anthohn/spotify-symfony.git`
2. Navigate to the project directory: `cd spotify-symfony`
3. Install dependencies: `composer install`
4. Set up the database and schema: `php bin/console doctrine:database:create` and `php bin/console doctrine:migrations:migrate`
5. Load fixtures for testing/demo data: `php bin/console doctrine:fixtures:load`
6. Start the Symfony development server: `symfony server:start`

## Usage

- Register an account
- Search for and play music
- Create and manage playlists

## Database Schema

### Conceptual Data Model (MCD) v1.0
![image](https://github.com/anthohn/spotify-symfony/assets/75019251/08f84053-ccb6-4c8e-bd4d-4c8688a135b8)


### Logical Data Model (MLD) 1.0

![image](https://github.com/anthohn/spotify-symfony/assets/75019251/d5f19819-e475-4851-937b-86506e7d3cb8)

