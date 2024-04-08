<template>
  <v-app id="inspire" class="bg-grey-lighten-3">
    <!-- navdrawer -->
    <v-navigation-drawer color="" class="" v-model="drawer">
      <v-card class="mb-2 mt-n1" color="primary">
        <v-card-text>
          <v-icon>mdi-language-html5</v-icon>
          <span class="ma-1"> Kanban Platform </span>
        </v-card-text>
      </v-card>
      <v-list class="mt-n1" nav>  
        <v-list-item
          prepend-icon="mdi-view-dashboard"
          title="Dashboard"
          active-color="primary"
          to="/"
        ></v-list-item>
      </v-list>
    </v-navigation-drawer>

    <v-app-bar class="rounded" density="compact">
      <v-app-bar-nav-icon color="primary" @click="drawer = !drawer"></v-app-bar-nav-icon>
      
      <v-app-bar-title></v-app-bar-title>
      <div class="text-center">
        <!-- avatar -->
    <v-menu
      open-on-hover
    >
      <template v-slot:activator="{ props }">
        <v-avatar  v-bind="props" color="primary" class="ma-2">MN</v-avatar>
      </template>
      <v-list>
        <v-list-item>
        <v-btn
          color="primary"
          prepend-icon="mdi-logout"
        >
          Logout
        </v-btn>
        </v-list-item>
      </v-list>
    </v-menu>
  </div>
    </v-app-bar>
    <v-main class="ma-2">
    <kanban-component></kanban-component>
    </v-main>
  </v-app>
</template>


<script>
import KanbanComponent from '@/components/KanbanComponent.vue'
export default {
  name: "HomeComponent",
  components: {
    KanbanComponent,
  },
  data: () => ({ drawer: null }),
};
</script>