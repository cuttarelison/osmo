/**
 * osmo - Header Definitions
 * Core structures and function declarations
 */

#ifndef OSMO_HEADER_H
#define OSMO_HEADER_H

#include <time.h>

#define OSMO_VERSION "1.0.0"
#define MAX_ROUTES 100
#define MAX_CONFIG_SIZE 512

/**
 * Route structure
 */
typedef struct {
    char path[256];
    char method[16];
    void (*handler)(void);
} Route;

/**
 * Application configuration
 */
typedef struct {
    int port;
    int debug;
    char theme[64];
    time_t start_time;
} Config;

/**
 * Main application structure
 */
typedef struct {
    int port;
    int debug;
    Route routes[MAX_ROUTES];
    int route_count;
    Config config;
} App;

/**
 * Function declarations
 */
App* init_app(void);
int load_config(App *app);
void setup_routes(App *app);
void run_app(App *app);
void cleanup_app(App *app);

#endif /* OSMO_HEADER_H */
