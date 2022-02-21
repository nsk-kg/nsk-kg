<template>
    <div id="officeModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="closeModal">&times;</span>
            <p>Some text in the Modal..</p>
        </div>
    </div>
</template>

<script>
export default {
    name: "OfficeModal.vue",
}
</script>

<style scoped>
    .modal {
        display: none;
        position: fixed;
        z-index: 4;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgb(0,0,0);
        background-color: rgba(0,0,0,0.4);
        justify-content: center;
        align-items: center;
    }

    .modal-content {
        background-color: #fefefe;
        margin: 50% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 70%;
    }

    .closeModal {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
        width: 20px;
    }

    .closeModal:hover,
    .closeModal:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
</style>
