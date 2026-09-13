# osmo Makefile
# Build and compile osmo project

CC = gcc
CFLAGS = -Wall -Wextra -std=c99 -O2
LDFLAGS = 

# Source files
SOURCES = main.c
OBJECTS = $(SOURCES:.c=.o)
TARGET = osmo

# Default target
all: $(TARGET)

# Build target
$(TARGET): $(OBJECTS)
	$(CC) $(CFLAGS) -o $(TARGET) $(OBJECTS) $(LDFLAGS)
	@echo "Build successful: $(TARGET)"

# Compile source files
%.o: %.c header.h
	$(CC) $(CFLAGS) -c $< -o $@

# Clean build artifacts
clean:
	rm -f $(OBJECTS) $(TARGET)
	@echo "Cleaned"

# Install
install: $(TARGET)
	cp $(TARGET) /usr/local/bin/
	@echo "Installed to /usr/local/bin/"

# Run
run: $(TARGET)
	./$(TARGET)

# Watch for changes
watch:
	@echo "Watching for changes..."
	@while true; do \
		inotifywait -e modify *.c *.h && make; \
	done

.PHONY: all clean install run watch
