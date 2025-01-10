# Use the official Nginx image as a base image
FROM nginx:latest

# Set the working directory to /src (where your app is mounted)
WORKDIR /src

# Copy custom Nginx config file into the container
COPY ./nginx.conf /etc/nginx/conf.d/default.conf

# Expose port 80 so we can access the Nginx server
EXPOSE 80

# Start Nginx when the container starts
CMD ["nginx", "-g", "daemon off;"]
