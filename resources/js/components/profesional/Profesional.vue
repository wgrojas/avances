<template>
  <div class="row">
    <div class="col-12 mb-2">
      <!-- llamamos al componente para Crear   -->
      <router-link :to="{ name: 'crear' }" class="btn btn-success"
        ><i class="fas fa-plus-circle"></i
      ></router-link>
    </div>
    <div class="col-12">
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead class="bg-primary text-white">
            <tr>
              <th>ID</th>
              <th>Identificacion</th>
              <th>Nombres</th>
              <th>Apellidos</th>
              <th>Correo</th>
              <th>Celular</th>
              <th>Ubicacion</th>
              <th>Contraseña</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="prof in profesional" :key="prof.id">
              <td>{{ prof.id }}</td>
              <td>{{ prof.identificacion }}</td>
              <td>{{ prof.nombres }}</td>
              <td>{{ prof.apellidos }}</td>
              <td>{{ prof.correo }}</td>
              <td>{{ prof.celular }}</td>
              <td>{{ prof.ubicacion }}</td>
              <td>{{ prof.contrasena }}</td>
              <td>
                <!-- llamamos al componente para Editar     -->
                <router-link
                  :to="{ name: 'editar', params: { id: prof.id } }"
                  class="btn btn-info"
                  ><i class="fas fa-edit"></i
                ></router-link>
                <a
                  type="button"
                  @click="borrarProfesional(prof.id)"
                  class="btn btn-danger"
                  ><i class="fas fa-trash"></i
                ></a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>

<script>

export default {
  // import axios from 'axios'
  name: "mostrar",
  data() {
    return {
      profesional: [],
    };
  },
  mounted() {
    this.mostrarProfesional();
  },
  methods: {
    async mostrarProfesional() {
      await this.axios.get("api/profesional").then((response) => {
        this.profesional = response.data;
        console.log(error);
        this.profesional = [];
      });
    },
    borrarProfesional(id) {
      if (confirm("¿Confirma eliminar el registro?")) {
        this.axios
          .delete(`api/profesional/${id}`)
          .then((response) => {
            this.mostrarProfesional();
          })
          .catch((error) => {
            console.log(error);
          });
      }
    },
  },
};
</script>