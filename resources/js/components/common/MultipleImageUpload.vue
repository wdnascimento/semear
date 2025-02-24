<template>
    <div :class="container_class">
        <label :for="id">Foto</label>
        <input type="file" :name="(field_name)+'[]'" @change="previewImage" :id="id" multiple :class="input_class" accept="image/*">
        <div class="image-preview " v-if="(selectedImages.length > 0)">
            <img v-for="(img, index) in selectedImages" :key="index" :src="img" class="d-flew p-1 preview" alt="Preview">
        </div>
    </div>
</template>

<script>
export default {

    // id, container_class, name, input_class , oldImageUrl
    props: {
        container_class: {
            type: String,
            default: 'form-group col-12'
        },
        field_name: {
            type: String,
            default: 'url'
        },
        id: {
            type: String,
            default: 'id'
        },
        input_class: {
            type: String,
            default: 'form-control'
        },

        old_image: {
            type: String,
            default: ''
        }
    },

    data() {
        return {
            selectedImages: [],
        };
    },
    methods: {
        previewImage(event) {
            // Referência ao elemento de input
            const files = event.target.files;
            this.selectedImages = [];

            for (let i = 0; i < files.length; i++) {
                const file = files[i];
                const reader = new FileReader();
                reader.onload = (e) => {
                    this.selectedImages.push(e.target.result);
                };
                reader.readAsDataURL(file);
            }
        }
    },

    mounted() {
        // this.selectedImages = this.old_image;
        console.log(this.field_name);
    },
};
</script>

<style scoped>
    .image-preview {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        justify-content: center;
    }

    .preview {
        width: 320px;
        height: 240px;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        object-fit: cover;
    }
</style>
