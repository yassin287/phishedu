# MySQL Database Options for Vercel Deployment

## Option 1: PlanetScale (Recommended - Free Tier)
1. Go to https://planetscale.com
2. Sign up for free account
3. Create new database: "phishedu"
4. Get connection details from dashboard
5. Use these in Vercel environment variables

## Option 2: Railway MySQL
1. Go to https://railway.app
2. Create new project
3. Add MySQL service
4. Get connection string from variables tab

## Option 3: Aiven MySQL (Free Tier)
1. Go to https://aiven.io
2. Create free account
3. Create MySQL service (free tier available)
4. Get connection details

## Option 4: FreeSQLDatabase.com
1. Go to https://www.freesqldatabase.com
2. Create free MySQL database (limited but works for testing)
3. Get connection details

## Recommended: PlanetScale Setup
PlanetScale offers:
- 1 database free
- 1 billion row reads/month
- 10 million row writes/month
- 5GB storage
- Perfect for this project

## Connection Format:
```
DB_HOST=your-host.amazonaws.com (or planetscale host)
DB_PORT=3306
DB_DATABASE=phishedu
DB_USERNAME=your-username
DB_PASSWORD=your-password
```
