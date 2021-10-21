require("./bootstrap");
import { createApp } from "vue";

import BookingForm from "./components/BookingForm.vue";

const app = createApp({});

app.component("booking-form", BookingForm);

app.mount("#app");

require("alpinejs");
