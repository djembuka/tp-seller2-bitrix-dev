import './application.css';

import { CatalogElement } from 'local.vue-components.catalog-element';

import { mapState, mapActions } from 'ui.vue3.pinia';
import { dataStore } from '../stores/data';

export const Application = {
  data() {
    return {};
  },
  components: {
    CatalogElement,
  },
  // language=Vue

  template: `
    <div class="slr2-catalog-section">
      <CatalogElement v-for="element in 20" :key="element" /> 
    </div>
	`,
  computed: {
    ...mapState(dataStore, ['sessionid', 'signedParameters']),
  },
  methods: {
    // ...mapActions(tableStore, [
    //   'hideErrorTable',
    //   'runColumnsNames',
    //   'runItems',
    //   'runDefaultSort',
    //   'runSetDefaultSort',
    // ]),
  },
  mounted() {},
};
