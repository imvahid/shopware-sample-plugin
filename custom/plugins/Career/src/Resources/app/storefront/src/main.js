import CareerPlugin from './career-plugin/career-plugin';

// Register your plugin via the existing PluginManager
const PluginManager = window.PluginManager;
PluginManager.register('Career', CareerPlugin);