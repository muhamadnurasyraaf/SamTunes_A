<template>
    <div class="max-w-lg px-4 py-8 mx-auto">
      <h2 class="mb-4 text-3xl font-semibold">User Profile</h2>
      <div class="overflow-hidden bg-white rounded-lg shadow-md">
        <div class="p-8">
          <div class="mb-4 text-center">
            <img :src="user.avatar" class="w-24 h-24 mx-auto mb-2 rounded-full" alt="User Avatar">
            <h3 class="text-xl font-semibold">{{ user.name }}</h3>
            <p class="text-gray-600">{{ user.email }}</p>
          </div>
          <div class="mb-4">
            <h4 class="mb-2 text-lg font-semibold">Profile Information</h4>
            <p class="text-gray-600">{{ user.bio }}</p>
          </div>
          <div>
            <h4 class="mb-2 text-lg font-semibold">Contact Information</h4>
            <p class="text-gray-600">Location: {{ user.location }}</p>
            <p class="text-gray-600">Phone: {{ user.phone }}</p>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    name: 'UserProfile',
    data() {
      return {
        user: {
          name: 'John Doe',
          email: 'john@example.com',
          avatar: 'https://via.placeholder.com/150', // Placeholder image URL
          location: 'New York, USA',
          bio: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at velit nec magna dapibus vehicula.',
          phone: '+1 123-456-7890',
          // Add more user data as needed
        }
      };
    }
  };
  </script>
  
  <style scoped>
  /* Add custom styles here */
  </style>
  