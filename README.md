# HNG Backend Task One - API Endpoint

A simple PHP API that returns user information along with a random cat fact.

## Project Structure

```
├── config.php      # Helper functions for JSON responses
├── index.php       # Main entry point and routing
├── me.php          # Core functionality for the /me endpoint
└── README.md       # Project documentation
```

## Features

- **RESTful API endpoint**: `/me`
- Returns user information (email, name, stack)
- Fetches random cat facts from external API
- UTC timestamp generation
- JSON formatted responses
- Error handling

## Requirements

- PHP 8.0 or higher
- cURL extension enabled
- Web server (Apache/Nginx) or PHP built-in server

## Installation

1. Clone or download this repository
2. Ensure PHP and cURL are installed on your system
3. Navigate to the project directory

## Usage

### Starting the Server

You can use PHP's built-in server for development:

```bash
php -S localhost:8000
```

### API Endpoint

#### GET `/me`

Returns user information, current UTC timestamp, and a random cat fact.

**Response Example:**

```json
{
    "status": "success",
    "user": {
        "email": "iamustapha213@gmail.com",
        "name": "Ibrahim Mustapha",
        "stack": "php/laravel"
    },
    "timestamp": 1704067200,
    "fact": "Cats sleep 16 to 18 hours per day."
}
```

**Error Response:**

```json
{
    "status": "error",
    "message": "Error details here"
}
```

### Testing

You can test the endpoint using:

**cURL:**
```bash
curl http://localhost:8000/me
```

**Browser:**
```
http://localhost:8000/me
```

## Code Overview

### Files Description

- **[config.php](config.php)**: Contains utility functions:
  - [`returnJson`](config.php) - Formats and returns JSON responses
  - [`dd`](config.php) - Debug helper function

- **[index.php](index.php)**: Main router that handles incoming requests and directs them to appropriate handlers

- **[me.php](me.php)**: Contains [`hng_task_zero`](me.php) function that:
  - Fetches cat facts from `https://catfact.ninja/fact`
  - Generates UTC timestamp
  - Returns formatted JSON response

## External APIs Used

- **Cat Fact API**: https://catfact.ninja/fact

## Author

Ibrahim Mustapha
- Email: iamustapha213@gmail.com
- Stack: PHP/Laravel

## License

This project is open source and available for educational purposes.