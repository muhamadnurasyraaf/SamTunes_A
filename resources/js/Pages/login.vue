<template>
  <Navbar />
    <div class="max-w-md px-4 py-8 mx-auto">
      <h2 class="mb-4 text-3xl font-semibold">Login</h2>
      <div class="overflow-hidden bg-white rounded-lg shadow-md">
        <div class="p-6">
          <form @submit.prevent="login">
            <div class="mb-4">
              <label for="email" class="block mb-2 font-semibold text-gray-700">Email</label>
              <input type="email" id="email" v-model="formData.email" class="w-full px-2 py-1 form-input" placeholder="Enter your email" required>
            </div>
            <div class="mb-4">
              <label for="password" class="block mb-2 font-semibold text-gray-700">Password</label>
              <input type="password" id="password" v-model="formData.password" class="w-full px-2 py-1 form-input" placeholder="Enter your password" required>
            </div>
            <div class="flex justify-end">
              <button type="submit" class="px-4 py-2 text-white bg-blue-500 rounded-md shadow-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  import Navbar from './components/Navbar.vue';
  
  export default {
    name: 'LoginForm',
    components:{
      Navbar,
    },
    data() {
      return {
        formData: {
          email: '',
          password: ''
        }
      };
    },
    methods: {
      login() {
        // Reset form after submission
        this.formData = {
          email: '',
          password: ''
        };
      }
    }
  };
  </script>
  
  <style scoped>
  /* Add custom styles here */
  </style>
  