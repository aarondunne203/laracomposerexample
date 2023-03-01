import {computed, isRef} from 'vue'

export const useMonthlyPayments = (interestRate, duration, total) => {
  const monthlyPayment = computed(() => {
    const principle = isRef(total) ? total.value : total
    const monthlyInterest = (isRef(interestRate) ? interestRate.value : interestRate) / 100 / 12
    const numberOfPayments = (isRef(duration) ? duration.value : duration) * 12

    return principle * monthlyInterest * (
      Math.pow(1 + monthlyInterest, numberOfPayments)
    ) / (
      Math.pow(1 + monthlyInterest, numberOfPayments) - 1
    )
  })

  return {monthlyPayment}
}
