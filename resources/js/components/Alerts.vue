<template>
    <div class="alerts-container">
        <div
            v-for="(alert, index) in alerts"
            :key="index"
            :class="alert.type"
            class="alert"
        >
            <div class="m-2">{{ alert.message }}</div>
            <button @click="closeAlert(index)" class="close">X</button>
        </div>
    </div>
</template>

<script>
import { computed, watch } from "vue";
import { useAlertsStore } from "../store/alerts.js";

export default {
    setup() {
        const alertsStore = useAlertsStore();
        const alerts = computed(() => alertsStore.allAlerts);

        const closeAlert = (index) => {
            alertsStore.removeAlert(index);
        };

        watch(
            alerts,
            (newAlerts) => {
                newAlerts.forEach((alert, index) => {
                    setTimeout(() => {
                        closeAlert(index);
                    }, 2000);
                });
            },
            { deep: true }
        );

        return { alerts, closeAlert };
    },
};
</script>

<style scoped>
.alerts-container {
    position: fixed;
    top: 1rem;
    right: 1rem;
    z-index: 1000;
}

.alert {
    padding: 1rem;
    margin: 1rem 0;
    border: 1px solid #ccc;
    border-radius: 4px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.alert.success {
    background-color: #d4edda;
    border-color: #c3e6cb;
    color: #155724;
}

.alert.warning {
    background-color: #fff3cd;
    border-color: #ffeeba;
    color: #856404;
}

.alert.error {
    background-color: #f8d7da;
    border-color: #f5c2c7;
    color: #721c24;
}

.close {
    padding: 0.2rem 0.5rem;
    background-color: #50575f;
    border: none;
    color: #ffffff;
    border-radius: 4px;
    cursor: pointer;
}
</style>
