# SQL Provisioning
===

This folder contains SQL files that provision the local database. They are executed in
alphabetical order, hence the `00-` prefix on the schema file. That ensures the schema
is created first. You can add as many files as you'd like, ensuring that all schema files
are named to be first.

**Do NOT include real production data in this directory!**
