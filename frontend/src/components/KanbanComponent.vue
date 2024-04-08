<template>
    <div class="mt-1">

        <v-card
        class="mb-2"
        max-width=""
      >
        <v-card-text>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</v-card-text>
      </v-card>
        
        <v-row>
    <v-col cols="auto">
      <v-card
        append-icon="mdi-check"
        class="mx-auto"
        max-width="372"
        prepend-icon="mdi-account"
        subtitle="prepend-icon and append-icon"
        title="Icons"
      >
        <v-card-text>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</v-card-text>
      </v-card>
    </v-col>

    <v-col cols="auto">
      <v-card
        class="mx-auto"
        max-width="372"
        subtitle="prepend and append"
        title="Icons"
      >
        <template v-slot:prepend>
          <v-icon color="primary" icon="mdi-account"></v-icon>
        </template>
        <template v-slot:append>
          <v-icon color="success" icon="mdi-check"></v-icon>
        </template>
        <v-card-text>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</v-card-text>
      </v-card>
    </v-col>

    <v-col cols="auto">
      <v-card
        append-avatar="https://cdn.vuetifyjs.com/images/john.jpg"
        class="mx-auto"
        max-width="372"
        prepend-avatar="https://cdn.vuetifyjs.com/images/logos/v-alt.svg"
        subtitle="prepend-avatar and append-avatar"
        title="Avatars"
      >
        <v-card-text>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</v-card-text>
      </v-card>
    </v-col>

    <v-col cols="auto">
      <v-card
        class="mx-auto"
        max-width="335"
        subtitle="prepend and append"
        title="Avatars"
      >
        <template v-slot:prepend>
          <v-avatar color="blue-darken-2">
            <v-icon icon="mdi-alarm"></v-icon>
          </v-avatar>
        </template>
        <template v-slot:append>
          <v-avatar size="24">
            <v-img
              alt="John"
              src="https://cdn.vuetifyjs.com/images/john.png"
            ></v-img>
          </v-avatar>
        </template>
        <v-card-text>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</v-card-text>
      </v-card>
    </v-col>
  </v-row>
    </div>
</template>
  