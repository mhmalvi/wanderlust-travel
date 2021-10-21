<template>
  <div class="sc_contact_form sc_contact_form_order aligncenter">
    <form>
      <div class="sc_contact_form_in">
        <h2 class="sc_contact_form_title">find a perfect vacation</h2>
        <div class="label_over">
          <input
            id="sc_contact_form_email"
            type="text"
            v-model="formdata.email"
            placeholder="E-MAIL"
          />
        </div>
        <select class="destinations" v-model="formdata.criteria">
          <option value="" disabled selected>PREDEFINED DESTINATIONS</option>
          <option value="Australia">Australia</option>
          <option value="London">London</option>
          <option value="New York">New York</option>
          <option value="Copenhagen">Copenhagen</option>
          <option value="Germany">Germany</option>
          <option value="Amsterdam">Amsterdam</option>
          <option value="Paris">Paris</option>
          <option value="Los Angeles">Los Angeles</option>
          <option value="Barcelona">Barcelona</option>
          <option value="Stockholm">Stockholm</option>
        </select>
        <div class="date_time">
          <div class="form_date start">
            <span class="icon"></span>
            <input
              placeholder="Date start"
              class="sc_contact_form_date js__datepicker"
              type="text"
              v-model="formdata.date_start"
            />
          </div>
          <div class="form_date end">
            <span class="icon"></span>
            <input
              placeholder="Date end"
              class="sc_contact_form_date js__datepicker"
              type="text"
              v-model="formdata.date_end"
            />
          </div>
        </div>
        <div class="sc_contact_form_button">
          <button
            type="button"
            class="submit-btn"
            @click="handleFormSubmit"
            :disabled="formIsValid"
          >
            SEND MESSAGE
          </button>
        </div>
      </div>
    </form>
  </div>
</template>
<script>
import { reactive, computed } from "vue";
export default {
  setup() {
    const formdata = reactive({
      email: "",
      criteria: "",
      date_start: "",
      date_end: "",
    });

    const validEmail = () => {
      const regx = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
      return regx.test(formdata) ? true : false;
    };

    const formIsValid = computed(() => {
      return validEmail() &&
        formdata.criteria &&
        formdata.date_start &&
        formdata.date_end
        ? true
        : false;
    });

    const handleFormSubmit = () => {
      console.log(formdata.email);
    };

    return {
      formdata,
      formIsValid,
      handleFormSubmit,
    };
  },
};
</script>
<style>
.submit-btn {
  cursor: pointer;
}
</style>