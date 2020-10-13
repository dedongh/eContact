<template>
    <ContactList endpoint="/api/birthdays"/>
</template>

<script>
   import ContactList from "../components/ContactList";
    export default {
        name: "BirthdaysIndex",
        components: {
          ContactList,
        },

    }
</script>

<style scoped>

</style>
