<template>
    <div :class="container_class">
        <label :for="id">Foto</label>
        <input type="file" :name="name"  @change="previewImage" :id="id" :class="input_class"  accept="image/*">
        <div class="image-preview" v-if="(imageData.length > 0)">
            <img class="preview" :src="imageData" alt="Preview">
        </div>
    </div>
</template>

<script>
export default {

    // id, container_class, name, input_class , oldImageUrl
    props: {
        container_class: {
            type: String,
            default: 'form-group col-4'
        },
        name: {
            type: String,
            default: 'photo'
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
            imageData: ""  // Armazena a imagem em formato base64
        };
    },
    methods: {
        previewImage(event) {
            // Referência ao elemento de input
            var input = event.target;
            // Verifica se um arquivo foi selecionado
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                // Quando o FileReader terminar de ler o arquivo
                reader.onload = (e) => {
                    this.imageData = e.target.result;  // Armazena o arquivo em base64
                };
                // Lê o arquivo como uma URL de dados (base64)
                reader.readAsDataURL(input.files[0]);
            }
        }
    },

    mounted() {
        this.imageData = this.old_image;
    },
};
</script>

<style scoped>
    .image-preview {
        margin-top: 20px;
    }
    .preview {
        max-width: 180px;
        height: auto;
    }
</style>
