<template>
    <ContactList endpoint="/api/contacts"/>
</template>

<script>
   import ContactList from "../components/ContactList";
    export default {
        name: "ContactsIndex",
        components: {
          ContactList,
        },

    }
</script>

<style scoped>

</style>
