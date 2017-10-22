<script>// MonthlyIncome.vue
import { Pie } from 'vue-chartjs'

export default {
  extends: Pie,
  props: ['name', 'labels', 'colors', 'data'],
  mounted () {
      this.renderChart({
        labels: this.labels,
        datasets: [
          {
            label: this.name,
            backgroundColor: this.colors,
            data: this.data
          }
        ]
      })
  }
}
</script>
