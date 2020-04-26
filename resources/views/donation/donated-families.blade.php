<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="donated_family in donated_families">
      <th scope="row" v-text="donated_family.id"></th>
      <td v-text="donated_family.name"></td>
    </tr>
  </tbody>
</table>

<button v-if="showDonatedFamilies" type="button" class="btn btn-success pull-right" @click="closeDonatedFamilies()">
Close
</button>