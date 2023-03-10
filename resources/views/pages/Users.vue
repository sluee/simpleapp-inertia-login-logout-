<template layout>

    <h1>List of Users</h1>
    <hr>

    <table class="table">
        <thead>
            <tr>
                <th>Serial #</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Department</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="user of users" :key="user.id">
                <td>{{ ('00000000' + user.id).slice(-8) }}</td>
                <td>{{ user.fullname }}</td>
                <td>{{ user.designation }}</td>
                <td>{{ user.department }}</td>
            </tr>
        </tbody>
    </table>

</template>

<script setup>

defineProps({
    'users': Array
})
</script>
