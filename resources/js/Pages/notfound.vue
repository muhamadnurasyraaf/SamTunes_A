<template>
    <div class="flex items-center justify-center h-screen bg-gray-100">
      <div class="text-center">
        <h1 class="mb-4 text-4xl font-bold text-gray-800">404 - Not Found</h1>
        <p class="mb-8 text-lg text-gray-600">The page you're looking for could not be found.</p>
        <router-link to="/" class="text-blue-500 hover:underline">Go back to Home</router-link>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    name: 'NotFound',
  };
  </script>
  
  <style scoped>
  /* Add custom styles here */
  </style>
  