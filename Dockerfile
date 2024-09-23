# Start from the existing eloufirhatim/helper:latest image
FROM eloufirhatim/helper:latest

# Set the working directory inside the container
WORKDIR /app

# Copy your updated app folder into the container
# This assumes your updated app folder is in the same directory as the Dockerfile
COPY . .

# Optional: If any dependencies need to be updated, you can add those steps here
# For example, you could run npm or composer commands
# RUN composer install && npm install

# Define the command to run your application (if different)
CMD ["bash", "./run.sh"]
