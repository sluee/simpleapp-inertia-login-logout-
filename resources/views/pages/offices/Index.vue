<template layout>


    <div class="flex justify-between">
        <h1>List of Offices</h1>

    </div>

    <hr>

    <table class="table">
        <thead>
            <tr>
                <th>Serial #</th>
                <th>Name</th>
                <th>Building</th>
                <th>In-charge</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="office in offices" :key="office.id">
                <td>{{ ('00000000' + office.id) }}</td>
                <td>{{ office.name }}</td>
                <td>{{ office.building }}</td>
                <td>{{ office.user.fullname }}</td>
            </tr>
        </tbody>
    </table>

</template>

<script setup>

defineProps({
    offices: Array
})
</script>
