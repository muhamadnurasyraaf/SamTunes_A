<template>
    <div class="max-w-md px-4 py-8 mx-auto">
      <h2 class="mb-4 text-3xl font-semibold">Register</h2>
      <div class="overflow-hidden bg-white rounded-lg shadow-md">
        <div class="p-6">
          <form @submit.prevent="register">
            <div class="mb-4">
              <label for="name" class="block mb-2 font-semibold text-gray-700">Name</label>
              <input type="text" id="name" v-model="formData.name" class="w-full form-input" placeholder="Enter your name" required>
            </div>
            <div class="mb-4">
              <label for="email" class="block mb-2 font-semibold text-gray-700">Email</label>
              <input type="email" id="email" v-model="formData.email" class="w-full form-input" placeholder="Enter your email" required>
            </div>
            <div class="mb-4">
              <label for="password" class="block mb-2 font-semibold text-gray-700">Password</label>
              <input type="password" id="password" v-model="formData.password" class="w-full form-input" placeholder="Enter your password" required>
            </div>
            <div class="flex justify-end">
              <button type="submit" class="px-4 py-2 text-white bg-blue-500 rounded-md shadow-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Register</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    name: 'RegistrationForm',
    data() {
      return {
        formData: {
          name: '',
          email: '',
          password: ''
        }
      };
    },
    methods: {
      register() {
        //TODO: Handle registration logic here (e.g., submit form data to server) 
        console.log('Form submitted:', this.formData);
        // Reset form after submission
        this.formData = {
          name: '',
          email: '',
          password: ''
        };
      }
    }
  };
  </script>
  