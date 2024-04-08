<template>
  <v-container fluid class="bg-grey-lighten-3 fill-height">
    <v-card class="mx-auto text-center mb-3" width="350">
      <v-card width="300" class="v-card--offset mx-auto mb-7" color="primary" elevation="4" dark>
        <v-card-text class="headline white--text"
          >Kanban Platform</v-card-text
        >
        <v-card-text>
          <v-icon size="96">mdi-language-html5</v-icon>
        </v-card-text>
      </v-card>
      <v-form ref="form" class="ma-3">
        <v-text-field
          v-model="email"
          variant="outlined"
          :rules="emailRules"
          label="Email"
          required
        ></v-text-field>

        <v-text-field
          v-model="password"
          :counter="8"
          variant="outlined"
          :rules="passwordRules"
          class="mt-1"
          label="Password"
          required
        ></v-text-field>

        <div class="d-flex flex-column mb-6">
          <v-btn class="mt-4" color="primary" block @click="resetValidation">
            Login
          </v-btn>
        </div>
      </v-form>
    </v-card>
  </v-container>
</template>

<script>
export default {
  data: () => ({
    name: "",
    emailRules: [
      (v) => !!v || "Email is required",
      (v) => (v && v.length <= 1) || "Email must be valid",
    ],
    passwordRules: [
      (v) => !!v || "Password is required",
      (v) => (v && v.length <= 8) || "Password must be less than 8 characters",
    ],
    select: null,
    items: ["Item 1", "Item 2", "Item 3", "Item 4"],
    checkbox: false,
  }),

  methods: {
    async validate() {
      const { valid } = await this.$refs.form.validate();

      if (valid) alert("Form is valid");
    },
    reset() {
      this.$refs.form.reset();
    },
    resetValidation() {
      this.$refs.form.resetValidation();
    },
  },
};
</script>