<template>
    <div>
        <button class="btn btn-primary ms-4 h-25" @click="followUser">
            Follow
        </button>
    </div>
</template>

<script>
export default {
    props: ["userId"],

    mounted() {
        console.log("Component mounted.");
    },

    data: function () {
        return {
            status:
        }
    },

    methods: {
        followUser() {
            axios.post("/follow/" + this.userId).then((response) => {
                console.log(response.data);
            });
        },
    },
};
</script>
