<template>
  <div class="project">
    <img alt="Vue logo" src="../assets/logo.png">

    <div class="card-group">
      <div class="card">
        <img src="https://docs.google.com/uc?id=19LBlQHwFSemOw7wF9PGjPmjACAVs4PwX" class="card-img-top" alt="Image">
        <div class="card-body">
          <router-link :to="{name: 'projectShow', params: {id: 1} }">
            <h5 class="card-title">Card title</h5>
          </router-link>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>
        </div>
      </div>

      <div class="card">
        <img src="https://docs.google.com/uc?id=19LBlQHwFSemOw7wF9PGjPmjACAVs4PwX" class="card-img-top" alt="Image">
        <div class="card-body">
          <router-link :to="{name: 'projectShow', params: {id: 2} }">
            <h5 class="card-title">Card title</h5>
          </router-link>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>
        </div>
      </div>

      <div class="card">
        <img src="https://docs.google.com/uc?id=19LBlQHwFSemOw7wF9PGjPmjACAVs4PwX" class="card-img-top" alt="Image">
        <div class="card-body">
          <router-link :to="{name: 'projectShow', params: {id: 3} }">
            <h5 class="card-title">Card title</h5>
          </router-link>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>
        </div>
      </div>

    </div>
  </div>
</template>
