import { defineStore } from "pinia";

export const useAlertsStore = defineStore("alerts", {
    state: () => ({
        alerts: [],
    }),
    actions: {
        addAlert(alert) {
            this.alerts.push(alert);
        },
        removeAlert(index) {
            this.alerts.splice(index, 1);
        },
    },
    getters: {
        allAlerts: (state) => state.alerts,
    },
});
