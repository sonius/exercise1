# Laravel PHP Framework


## Official Documentation

Installation:

- git clone https://github.com/sonius/exercise1.git projectname
- cd projectname
- composer install
- php artisan key:generate
- Create a database and inform .env
- php artisan migrate to create tables
- php artisan db:seed
- php artisan serve to start the app on http://localhost:8000/


## API endpoints

Cinemas Listing
List of available cinemas.
methods: POST or GET
/api/cinemas

example:

{
    "success": true,
    "data": [
        {
            "id": 1,
            "name": "The Dr. Darrick Hegmann Cinema"
        },
        {
            "id": 2,
            "name": "The Prof. Nikolas Reynolds PhD Cinema"
        },
        {
            "id": 3,
            "name": "The Dr. Henri Wolf I Cinema"
        },
        {
            "id": 4,
            "name": "The Rahsaan Gleason Cinema"
        },
        {
            "id": 5,
            "name": "The Adrien Williamson Cinema"
        },
        {
            "id": 6,
            "name": "The Maxine Upton Jr. Cinema"
        },
        {
            "id": 7,
            "name": "The Verda Herman Cinema"
        },
        {
            "id": 8,
            "name": "The Breanne Conn Cinema"
        },
        {
            "id": 9,
            "name": "The Belle Rohan Sr. Cinema"
        },
        {
            "id": 10,
            "name": "The Ms. Maegan Ratke V Cinema"
        }
    ]
}


Cinema Information
Information about an individual cinema.
methods: POST or GET
/cinemas/{name}

NB: {name} must be url encoded


example:

{
    "success": true,
    "data": {
        "id": 8,
        "name": "The Breanne Conn Cinema",
        "address": "38235 Bartell Knolls Apt. 920\nDanielborough, AZ 00770",
        "latlong": "85.361048\/-10.850383"
    }
}



  Movie Information
Information about an individual movie.
methods: POST or GET
/movies/{name}

NB: {name] must be url encoded

{
    "success": true,
    "data": {
        "movie": [
            {
                "id": 10,
                "title": "A Pale Golden Rod",
                "cinemas": [
                    {
                        "id": 9,
                        "name": "The Rosamond Ortiz DVM Cinema",
                        "address": "5912 Carlo Extension\nEmmerichberg, SC 10627",
                        "latlong": "-88.774289\/-19.418191",
                        "created_at": "2016-11-28 01:59:47",
                        "updated_at": "2016-11-28 01:59:47",
                        "pivot": {
                            "movie_id": 10,
                            "cinema_id": 9
                        }
                    },
                    {
                        "id": 10,
                        "name": "The Cecile Nitzsche Cinema",
                        "address": "534 Jacobi Rue Apt. 481\nWindlershire, AK 46348-5050",
                        "latlong": "55.461056\/58.974825",
                        "created_at": "2016-11-28 01:59:47",
                        "updated_at": "2016-11-28 01:59:47",
                        "pivot": {
                            "movie_id": 10,
                            "cinema_id": 10
                        }
                    }
                ]
            }
        ],
        "sessions": {
            "cinema_ids": {
                "9": [
                    {
                        "id": 7,
                        "cinema_id": 9,
                        "movie_id": 10,
                        "created_at": "2016-11-28 01:59:47",
                        "updated_at": "2016-11-28 01:59:47",
                        "cinema_movie_id": 9,
                        "session_time": "2016-12-02 21:56:01"
                    }
                ],
                "10": [
                    {
                        "id": 8,
                        "cinema_id": 10,
                        "movie_id": 10,
                        "created_at": "2016-11-28 01:59:47",
                        "updated_at": "2016-11-28 01:59:47",
                        "cinema_movie_id": 10,
                        "session_time": "2016-12-07 09:54:09"
                    },
                    {
                        "id": 9,
                        "cinema_id": 10,
                        "movie_id": 10,
                        "created_at": "2016-11-28 01:59:47",
                        "updated_at": "2016-11-28 01:59:47",
                        "cinema_movie_id": 10,
                        "session_time": "2016-11-28 02:47:17"
                    },
                    {
                        "id": 10,
                        "cinema_id": 10,
                        "movie_id": 10,
                        "created_at": "2016-11-28 01:59:47",
                        "updated_at": "2016-11-28 01:59:47",
                        "cinema_movie_id": 10,
                        "session_time": "2016-12-14 07:50:02"
                    }
                ]
            }
        }
    }
}