<template>
  <div class="row ">
    <div class="col-12 mb-2">
      <!-- llamamos al componente para Crear   -->
      <router-link :to="{ name: 'crearHistorial' }" class="btn btn-success"
        ><i class="fas fa-plus-circle">Agregar Historia</i
      ></router-link>
    </div>
    <div class="col-12">
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead class="bg-primary text-white">
            <tr>
              <th>Id</th>
              <th>Nombre del Profesional</th>
              <th>Nombre del Paciente</th>
              <th>Fecha</th>
              <th>Estado actual</th>
              <th>Antecedentes</th>
              <th>Evolucion Final</th>
              <th>Concepto y Recomendaciones</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="historia in historial" :key="historia.id">
              <td>{{ historia.id }}</td>
              <td>{{ historia.nombreProfesional }}</td>
              <td>{{ historia.nombrePaciente }}</td>
              <td>{{ historia.fecha }}</td>
              <td>{{ historia.estadoPaciente }}</td>
              <td>{{ historia.antecedentes }}</td>
              <td>{{ historia.evolucionFinal }}</td>
              <td>{{ historia.concepto }}</td>
              <td>
                <!-- llamamos al componente para Editar     -->
                <router-link
                  :to="{ name: 'editarHistorial', params: { id: historia.id } }"
                  class="btn btn-info"
                  ><i class="fas fa-edit"></i
                ></router-link>
                <a
                  type="button"
                  @click="borrarHistorial(historia.id)"
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

  name: "historial",
  data() {
    return {
      historial: [],
    };
  },
  mounted() {
    this.mostrarHistorial();
  },
  methods: {
    async mostrarHistorial() {
      await this.axios.get("api/historial").then((response) => {
        this.historial = response.data;
        console.log(error);
        this.historial = [];
      });
    },
    borrarHistorial(id) {
      if (confirm("¿Confirma eliminar el registro?")) {
        this.axios
          .delete(`api/historial/${id}`)
          .then((response) => {
            this.mostrarHistorial();
          })
          .catch((error) => {
            console.log(error);
          });
      }
    },
  },
};
</script>