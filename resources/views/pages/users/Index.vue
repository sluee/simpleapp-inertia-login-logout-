<template layout>

    <div class="flex justify-between">
        <h1>List of Users</h1>
        <Link href="/users/create" class="btn-primary">Create User</Link>
    </div>

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
import {Link} from '@inertiajs/inertia-vue3'

defineProps({
    'users': Array
})
</script>
