<template>
  <div class="welcome-container">
    <div class="logo-container">
      <img src="https://cdn-icons-png.flaticon.com/512/3135/3135755.png" alt="Education Logo" class="logo" />
    </div>

    <h1 class="title">Course Management App</h1>

    <a href="/course" class="cta-button">
      📋 View Courses
    </a>
  </div>
</template>

<script>
export default {
  name: 'HomePage',
};
</script>

<style scoped>
.welcome-container {
  min-height: 100vh;
  background: linear-gradient(135deg, #f0f4ff, #ffffff, #e6eeff);
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.logo-container {
  margin-bottom: 30px;
  animation: zoomIn 1s ease forwards;
}

.logo {
  width: 140px;
  height: 140px;
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
  border-radius: 20px;
}

.title {
  font-size: 3.5rem;
  font-weight: 900;
  color: #2c3e50;
  text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
  margin-bottom: 25px;
  animation: fadeInUp 1.2s ease forwards;
}

.cta-button {
  display: inline-block;
  background-color: #4a90e2;
  color: white;
  padding: 15px 30px;
  font-size: 1.2rem;
  font-weight: bold;
  border-radius: 50px;
  text-decoration: none;
  box-shadow: 0 8px 16px rgba(74, 144, 226, 0.4);
  transition: all 0.3s ease;
  animation: fadeInUp 1.5s ease forwards;
}

.cta-button:hover {
  background-color: #357ab8;
  transform: scale(1.05);
  box-shadow: 0 12px 20px rgba(74, 144, 226, 0.6);
}

/* Animations */
@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(30px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

@keyframes zoomIn {
  from {
    opacity: 0;
    transform: scale(0.8);
  }
  to {
    opacity: 1;
    transform: scale(1);
  }
}
</style>
