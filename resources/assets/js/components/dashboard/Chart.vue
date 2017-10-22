<script>// MonthlyIncome.vue
import { Bar } from 'vue-chartjs'

export default {
  extends: Bar,
  props: ['name', 'labels', 'color', 'data'],
  mounted () {
      this.renderChart({
        labels: this.labels,
        datasets: [
          {
            label: this.name,
            backgroundColor: this.color,
            data: this.data
          }
        ]
      })
  }
}
</script>
